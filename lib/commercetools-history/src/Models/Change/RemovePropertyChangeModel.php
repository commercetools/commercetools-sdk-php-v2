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
final class RemovePropertyChangeModel extends JsonObjectModel implements RemovePropertyChange
{

    public const DISCRIMINATOR_VALUE = 'RemovePropertyChange';
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
     * @var ?mixed
     */
    protected $previousValue;

    /**
     *
     * @var ?string
     */
    protected $path;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
         $previousValue = null,
        ?string $path = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->path = $path;
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
     * <p>Value before the change.</p>
     *
     *
     * @return null|mixed
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = $data;
        }

        return $this->previousValue;
    }

    /**
     * <p>Path to the property that was removed.</p>
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
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?string $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }



}
