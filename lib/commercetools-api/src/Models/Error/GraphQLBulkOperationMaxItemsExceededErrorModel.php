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
final class GraphQLBulkOperationMaxItemsExceededErrorModel extends JsonObjectModel implements GraphQLBulkOperationMaxItemsExceededError
{
    public const DISCRIMINATOR_VALUE = 'BulkOperationMaxItemsExceeded';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?int
     */
    protected $limit;

    /**
     *
     * @var ?int
     */
    protected $provided;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $limit = null,
        ?int $provided = null,
        ?string $code = null
    ) {
        $this->limit = $limit;
        $this->provided = $provided;
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
     * <p>Maximum number of items allowed in a single bulk request.</p>
     *
     *
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * <p>Number of items provided in the request.</p>
     *
     *
     * @return null|int
     */
    public function getProvided()
    {
        if (is_null($this->provided)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PROVIDED);
            if (is_null($data)) {
                return null;
            }
            $this->provided = (int) $data;
        }

        return $this->provided;
    }


    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?int $provided
     */
    public function setProvided(?int $provided): void
    {
        $this->provided = $provided;
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
