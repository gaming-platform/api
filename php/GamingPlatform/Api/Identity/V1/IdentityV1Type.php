<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Identity\V1;

// This file is auto-generated. Do not edit!

enum IdentityV1Type: string
{
    case Bot = 'Identity.Bot.v1';
    case GetBotByUsername = 'Identity.GetBotByUsername.v1';
    case GetBotByUsernameResponse = 'Identity.GetBotByUsernameResponse.v1';
    case RegisterBot = 'Identity.RegisterBot.v1';
    case RegisterBotResponse = 'Identity.RegisterBotResponse.v1';
    case UserArrived = 'Identity.UserArrived.v1';
    case UserSignedUp = 'Identity.UserSignedUp.v1';
}
