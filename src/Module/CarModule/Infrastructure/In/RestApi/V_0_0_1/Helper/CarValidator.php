<?php

namespace App\Module\CarModule\Infrastructure\In\RestApi\V_0_0_1\Helper;

use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class CarValidator
{

    // add sql Injection validator for all fields
    // add validate functions for added fields

    public function statusValidator(string $status): void
    {
        if (!(preg_match('@^ACTIVE|BLOCKED|ARCHIVED$@', $status))) {
            throw new BadRequestException("Bad status. Supported statuses: ACTIVE, BLOCKED, ARCHIVED.");
        }
    }

    public function vinValidator(string $vin): void
    {
        if (!(preg_match('@^[A-Z0-9]{17}$@', $vin))) {
            throw new BadRequestException("Bad Request. Vin must contain 17 characters consisting of uppercase letters and numbers. (W0L214F5214852149)");
        }
    }

    public function putIdValidator(int $paramId, int $modelId): void
    {
        if (!($paramId == $modelId))
        {
            throw new BadRequestException("Bad request. The fields id from params and id from body are different.");
        }
    }
}