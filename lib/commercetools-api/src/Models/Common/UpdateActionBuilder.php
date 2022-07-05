<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<UpdateAction>
 */
final class UpdateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $action;

    /**

     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param ?string $action
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }


    public function build(): UpdateAction
    {
        return new UpdateActionModel(
            $this->action
        );
    }

    public static function of(): UpdateActionBuilder
    {
        return new self();
    }
}
