<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerEmailVerifiedMessagePayload>
 */
final class CustomerEmailVerifiedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): CustomerEmailVerifiedMessagePayload
    {
        return new CustomerEmailVerifiedMessagePayloadModel(
            $this->type
        );
    }

    public static function of(): CustomerEmailVerifiedMessagePayloadBuilder
    {
        return new self();
    }
}
