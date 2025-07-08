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
 * @implements Builder<RecurringOrderKeySetMessagePayload>
 */
final class RecurringOrderKeySetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $oldKey;

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:RecurringOrder">RecurringOrder</a> after the <a href="ctp:api:type:RecurringOrderSetKeyAction">Set Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:RecurringOrder">RecurringOrder</a> before the <a href="ctp:api:type:RecurringOrderSetKeyAction">Set Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldKey()
    {
        return $this->oldKey;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $oldKey
     * @return $this
     */
    public function withOldKey(?string $oldKey)
    {
        $this->oldKey = $oldKey;

        return $this;
    }


    public function build(): RecurringOrderKeySetMessagePayload
    {
        return new RecurringOrderKeySetMessagePayloadModel(
            $this->key,
            $this->oldKey
        );
    }

    public static function of(): RecurringOrderKeySetMessagePayloadBuilder
    {
        return new self();
    }
}
