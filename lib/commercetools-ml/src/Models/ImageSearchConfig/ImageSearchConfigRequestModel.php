<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImageSearchConfigRequestModel extends JsonObjectModel implements ImageSearchConfigRequest
{
    /**

     * @var ?ImageSearchConfigUpdateActionCollection
     */
    protected $actions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ImageSearchConfigUpdateActionCollection $actions = null
    ) {
        $this->actions = $actions;
    }

    /**
     * <p>The list of update actions to be performed on the project.</p>
     *

     * @return null|ImageSearchConfigUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = ImageSearchConfigUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }


    /**
     * @param ?ImageSearchConfigUpdateActionCollection $actions
     */
    public function setActions(?ImageSearchConfigUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }
}
