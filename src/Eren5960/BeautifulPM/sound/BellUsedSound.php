<?php
/**
 *  _______                   _______ _______ _______  _____
 * (_______)                 (_______|_______|_______)(_____)
 *  _____    ____ _____ ____  ______  _______ ______  _  __ _
 * |  ___)  / ___) ___ |  _ \(_____ \(_____  |  ___ \| |/ /| |
 * | |_____| |   | ____| | | |_____) )     | | |___) )   /_| |
 * |_______)_|   |_____)_| |_(______/      |_|______/ \_____/
 *
 * @author Eren5960
 * @link   https://github.com/Eren5960
 * @date   23 Mayıs 2020
 */
declare(strict_types=1);

namespace Eren5960\BeautifulPM\sound;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\world\sound\Sound;

class BellUsedSound implements Sound {
    public function encode(?Vector3 $pos): array {
        return [
            LevelSoundEventPacket::create(
                LevelSoundEventPacket::SOUND_BLOCK_BELL_HIT,
                $pos
            )
        ];
    }
}
