<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Chat\V1;

// This file is auto-generated. Do not edit!

/** @deprecated */
final class ChatV1Factory
{
    /** @deprecated */
    public static function createInitiateChat(
        string $data
    ): \GamingPlatform\Api\Chat\V1\InitiateChat {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\InitiateChat();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createInitiateChatResponse(
        string $data
    ): \GamingPlatform\Api\Chat\V1\InitiateChatResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\InitiateChatResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createMessageWritten(
        string $data
    ): \GamingPlatform\Api\Chat\V1\MessageWritten {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\MessageWritten();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createWriteMessage(
        string $data
    ): \GamingPlatform\Api\Chat\V1\WriteMessage {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\WriteMessage();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createWriteMessageResponse(
        string $data
    ): \GamingPlatform\Api\Chat\V1\WriteMessageResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\WriteMessageResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

}
