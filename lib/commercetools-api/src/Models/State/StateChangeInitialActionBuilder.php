<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateChangeInitialAction>
 */
final class StateChangeInitialActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $initial;

    /**
     * <p>Set to <code>true</code> for defining the State as initial State in a state machine and making it the first step in a workflow.</p>
     *
     * @return null|bool
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * @param ?bool $initial
     * @return $this
     */
    public function withInitial(?bool $initial)
    {
        $this->initial = $initial;

        return $this;
    }


    public function build(): StateChangeInitialAction
    {
        return new StateChangeInitialActionModel(
            $this->initial
        );
    }

    public static function of(): StateChangeInitialActionBuilder
    {
        return new self();
    }
}
