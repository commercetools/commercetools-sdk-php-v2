<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLRecurringOrderFailureErrorModel extends JsonObjectModel implements GraphQLRecurringOrderFailureError
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderFailure';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?mixed
     */
    protected $details;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        $details = null,
        ?string $code = null
    ) {
        $this->details = $details;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Details about the error's cause and the entities involved.</p>
     *
     *
     * @return null|mixed
     */
    public function getDetails()
    {
        if (is_null($this->details)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_DETAILS);
            if (is_null($data)) {
                return null;
            }
            $this->details = $data;
        }

        return $this->details;
    }


    /**
     * @param mixed $details
     */
    public function setDetails($details): void
    {
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
