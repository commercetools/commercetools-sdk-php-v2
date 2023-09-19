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
 * @implements Builder<ApprovalRuleDescriptionSetMessagePayload>
 */
final class ApprovalRuleDescriptionSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $description;

    /**

     * @var ?string
     */
    private $oldDescription;

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetDescriptionAction">Set Description</a> update action.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetDescriptionAction">Set Description</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldDescription()
    {
        return $this->oldDescription;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?string $oldDescription
     * @return $this
     */
    public function withOldDescription(?string $oldDescription)
    {
        $this->oldDescription = $oldDescription;

        return $this;
    }


    public function build(): ApprovalRuleDescriptionSetMessagePayload
    {
        return new ApprovalRuleDescriptionSetMessagePayloadModel(
            $this->description,
            $this->oldDescription
        );
    }

    public static function of(): ApprovalRuleDescriptionSetMessagePayloadBuilder
    {
        return new self();
    }
}
