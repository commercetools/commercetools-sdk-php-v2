<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerPasswordUpdatedMessagePayloadModel extends JsonObjectModel implements CustomerPasswordUpdatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerPasswordUpdated';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?bool
     */
    protected $reset;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $reset = null
    ) {
        $this->reset = $reset;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Whether the Customer's password was updated during the <a href="/../api/projects/customers#customers-password-reset">Customer's Password Reset</a> workflow.</p>
     *

     * @return null|bool
     */
    public function getReset()
    {
        if (is_null($this->reset)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_RESET);
            if (is_null($data)) {
                return null;
            }
            $this->reset = (bool) $data;
        }

        return $this->reset;
    }


    /**
     * @param ?bool $reset
     */
    public function setReset(?bool $reset): void
    {
        $this->reset = $reset;
    }
}
