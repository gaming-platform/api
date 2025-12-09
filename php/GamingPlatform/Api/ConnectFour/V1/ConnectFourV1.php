<?php

declare(strict_types=1);

namespace GamingPlatform\Api\ConnectFour\V1;

// This file is auto-generated. Do not edit!

final class ConnectFourV1
{
    public static function createGame_Move(
        ?string $data = null
    ): Game\Move {
        static $template;
        $template ??= new Game\Move();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string GameType = 'ConnectFour.Game.v1';
    public static function createGame(
        ?string $data = null
    ): Game {
        static $template;
        $template ??= new Game();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string GetGamesByPlayerType = 'ConnectFour.GetGamesByPlayer.v1';
    public static function createGetGamesByPlayer(
        ?string $data = null
    ): GetGamesByPlayer {
        static $template;
        $template ??= new GetGamesByPlayer();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string GetGamesByPlayerResponseType = 'ConnectFour.GetGamesByPlayerResponse.v1';
    public static function createGetGamesByPlayerResponse(
        ?string $data = null
    ): GetGamesByPlayerResponse {
        static $template;
        $template ??= new GetGamesByPlayerResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string JoinGameType = 'ConnectFour.JoinGame.v1';
    public static function createJoinGame(
        ?string $data = null
    ): JoinGame {
        static $template;
        $template ??= new JoinGame();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string JoinGameResponseType = 'ConnectFour.JoinGameResponse.v1';
    public static function createJoinGameResponse(
        ?string $data = null
    ): JoinGameResponse {
        static $template;
        $template ??= new JoinGameResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string MakeMoveType = 'ConnectFour.MakeMove.v1';
    public static function createMakeMove(
        ?string $data = null
    ): MakeMove {
        static $template;
        $template ??= new MakeMove();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string MakeMoveResponseType = 'ConnectFour.MakeMoveResponse.v1';
    public static function createMakeMoveResponse(
        ?string $data = null
    ): MakeMoveResponse {
        static $template;
        $template ??= new MakeMoveResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string OpenGameType = 'ConnectFour.OpenGame.v1';
    public static function createOpenGame(
        ?string $data = null
    ): OpenGame {
        static $template;
        $template ??= new OpenGame();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string OpenGameResponseType = 'ConnectFour.OpenGameResponse.v1';
    public static function createOpenGameResponse(
        ?string $data = null
    ): OpenGameResponse {
        static $template;
        $template ??= new OpenGameResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
}
