<?php

/**
 * Vonage Client Library for PHP
 *
 * @copyright Copyright (c) 2016-2022 Vonage, Inc. (http://vonage.com)
 * @license https://github.com/Vonage/vonage-php-sdk-core/blob/master/LICENSE.txt Apache License 2.0
 */

declare(strict_types=1);

namespace Vonage\Insights;

class Advanced extends Standard
{

    public function getValidNumber()
    {
        return $this->data['valid_number'];
    }

    public function getReachable()
    {
        return $this->data['reachable'];
    }
}
