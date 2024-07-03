<?php

declare(strict_types=1);

namespace XanderID\ChatMath;

use MathParser\Exceptions\MathParserException;
use MathParser\Interpreting\Evaluator;
use MathParser\StdMathParser;
use pocketmine\event\EventPriority;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use function array_column;
use function array_map;
use function count;
use function preg_match_all;
use function str_replace;

class ChatMath extends PluginBase {
	public function onEnable() : void {
		$this->getServer()->getPluginManager()->registerEvent(PlayerChatEvent::class, function (PlayerChatEvent $event) : void {
			$this->onChat($event);
		}, EventPriority::LOW, $this);
	}

	/**
	 * @return list<string>
	 */
	public function parseChat(string $chat) : array {
		$parsed = [];
		$pattern = '/\{(.*?)\}/';
		preg_match_all($pattern, $chat, $matches);

		foreach ($matches[1] as $index => $match) {
			$parsed[] = [
				'from' => $matches[0][$index],
				'to' => $match,
			];
		}

		return $parsed;
	}

	public function parseMath(string $math) : string {
		$parser = new StdMathParser();
		$evaluator = new Evaluator();

		try {
			$parse = $parser->parse($math);
			$result = $parse->accept($evaluator);

			return (string) $result;
		} catch (MathParserException $exception) {
			// IGNORE
		}

		return $math;
	}

	public function onChat(PlayerChatEvent $event) : void {
		if ($event->isCancelled()) {
			return;
		}

		$player = $event->getPlayer();
		$message = $event->getMessage();

		$findMath = $this->parseChat($message);
		$parseChat = array_column($findMath, 'from');
		$parseMath = array_map(function (string $math) : string {
			return $this->parseMath($math);
		}, array_column($findMath, 'to'));

		if (count($parseMath) < 1) {
			return;
		}

		$math = str_replace($parseChat, $parseMath, $message);
		$event->cancel();
		$player->chat($math);
	}
}
