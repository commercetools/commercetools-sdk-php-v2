<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionChangeTriggersAction>
 */
final class ExtensionChangeTriggersActionBuilder implements Builder
{
    /**
     * @var ?ExtensionTriggerCollection
     */
    private $triggers;

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * @return $this
     */
    public function withTriggers(?ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;

        return $this;
    }


    public function build(): ExtensionChangeTriggersAction
    {
        return new ExtensionChangeTriggersActionModel(
            $this->triggers
        );
    }

    public static function of(): ExtensionChangeTriggersActionBuilder
    {
        return new self();
    }
}
