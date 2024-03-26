<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetRangesFacetRangeModel extends JsonObjectModel implements ProductSearchFacetRangesFacetRange
{
    /**
     *
     * @var ?mixed
     */
    protected $from;

    /**
     *
     * @var ?mixed
     */
    protected $to;

    /**
     *
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        $from = null,
        $to = null,
        ?string $key = null
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->key = $key;
    }

    /**
     * <p>Starting value of the bucket (inclusive).</p>
     *
     *
     * @return null|mixed
     */
    public function getFrom()
    {
        if (is_null($this->from)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_FROM);
            if (is_null($data)) {
                return null;
            }
            $this->from = $data;
        }

        return $this->from;
    }

    /**
     * <p>Ending value of the bucket (non-inclusive).</p>
     *
     *
     * @return null|mixed
     */
    public function getTo()
    {
        if (is_null($this->to)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_TO);
            if (is_null($data)) {
                return null;
            }
            $this->to = $data;
        }

        return $this->to;
    }

    /**
     * <p>Key to assign the bucket.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }


    /**
     * @param mixed $from
     */
    public function setFrom($from): void
    {
        $this->from = $from;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to): void
    {
        $this->to = $to;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
