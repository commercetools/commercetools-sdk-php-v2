<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AddPropertyChangeModel extends JsonObjectModel implements AddPropertyChange
{

    public const DISCRIMINATOR_VALUE = 'AddPropertyChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?string
     */
    protected $path;

    /**
     *
     * @var ?mixed
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $path = null,
         $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->path = $path;
        $this->nextValue = $nextValue;
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
     * <p>Update action for <code>addProperty</code> on custom objects</p>
     *
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Value path to the property that was added</p>
     *
     *
     * @return null|string
     */
    public function getPath()
    {
        if (is_null($this->path)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PATH);
            if (is_null($data)) {
                return null;
            }
            $this->path = (string) $data;
        }

        return $this->path;
    }

    /**
     *
     * @return null|mixed
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = $data;
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
