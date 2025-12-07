<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Chat\V1;

// This file is auto-generated. Do not edit!

final class ChatV1
{
    public const string InitiateChatType = 'Chat.InitiateChat.v1';
    public static function createInitiateChat(
        ?string $data = null
    ): InitiateChat {
        static $template;
        $template ??= new InitiateChat();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string InitiateChatResponseType = 'Chat.InitiateChatResponse.v1';
    public static function createInitiateChatResponse(
        ?string $data = null
    ): InitiateChatResponse {
        static $template;
        $template ??= new InitiateChatResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string MessageWrittenType = 'Chat.MessageWritten.v1';
    public static function createMessageWritten(
        ?string $data = null
    ): MessageWritten {
        static $template;
        $template ??= new MessageWritten();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
}
