<?php

declare(strict_types=1);

namespace GamingPlatform\Api\ConnectFour\V1;

// This file is auto-generated. Do not edit!

final class ConnectFourV1Factory
{
    public static function createGame_Move(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\Game\Move {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\Game\Move();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createGame(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\Game {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\Game();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createGetGamesByPlayer(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\GetGamesByPlayer {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\GetGamesByPlayer();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createGetGamesByPlayerResponse(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\GetGamesByPlayerResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\GetGamesByPlayerResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createJoinGame(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\JoinGame {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\JoinGame();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createJoinGameResponse(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\JoinGameResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\JoinGameResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createMakeMove(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\MakeMove {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\MakeMove();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createMakeMoveResponse(
        string $data
    ): \GamingPlatform\Api\ConnectFour\V1\MakeMoveResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\ConnectFour\V1\MakeMoveResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

}
