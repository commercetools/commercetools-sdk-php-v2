<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RelativeAllocationDraftModel extends JsonObjectModel implements RelativeAllocationDraft
{
    public const DISCRIMINATOR_VALUE = 'Relative';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $percentage;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $percentage = null,
        ?string $type = null
    ) {
        $this->percentage = $percentage;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of the Allocation.</p>
     *
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
     * <p>Percentage of the Order total allocated to the Payment Method. For example, <code>100</code> allocates the entire Order total.</p>
     *
     *
     * @return null|int
     */
    public function getPercentage()
    {
        if (is_null($this->percentage)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PERCENTAGE);
            if (is_null($data)) {
                return null;
            }
            $this->percentage = (int) $data;
        }

        return $this->percentage;
    }


    /**
     * @param ?int $percentage
     */
    public function setPercentage(?int $percentage): void
    {
        $this->percentage = $percentage;
    }
}
