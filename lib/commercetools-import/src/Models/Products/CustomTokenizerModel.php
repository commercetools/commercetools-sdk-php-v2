<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomTokenizerModel extends JsonObjectModel implements CustomTokenizer
{
    public const DISCRIMINATOR_VALUE = 'custom';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?array
     */
    protected $inputs;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $inputs = null,
        ?string $type = null
    ) {
        $this->inputs = $inputs;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     *
     * @return null|array
     */
    public function getInputs()
    {
        if (is_null($this->inputs)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_INPUTS);
            if (is_null($data)) {
                return null;
            }
            $this->inputs = $data;
        }

        return $this->inputs;
    }


    /**
     * @param ?array $inputs
     */
    public function setInputs(?array $inputs): void
    {
        $this->inputs = $inputs;
    }
}
