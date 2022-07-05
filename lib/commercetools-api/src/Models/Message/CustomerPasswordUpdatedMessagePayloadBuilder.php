<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerPasswordUpdatedMessagePayload>
 */
final class CustomerPasswordUpdatedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $reset;

    /**
     * <p>true, if password has been updated during Customer's Password Reset workflow.</p>
     *

     * @return null|bool
     */
    public function getReset()
    {
        return $this->reset;
    }

    /**
     * @param ?bool $reset
     * @return $this
     */
    public function withReset(?bool $reset)
    {
        $this->reset = $reset;

        return $this;
    }


    public function build(): CustomerPasswordUpdatedMessagePayload
    {
        return new CustomerPasswordUpdatedMessagePayloadModel(
            $this->reset
        );
    }

    public static function of(): CustomerPasswordUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}
