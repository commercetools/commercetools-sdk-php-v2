<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesSuccess>
 */
final class AgentResponsesSuccessBuilder implements Builder
{
    /**

     * @var ?WarningObjectCollection
     */
    private $warnings;

    /**

     * @var ?string
     */
    private $threadId;

    /**
     * <p>Non-fatal issues encountered while processing the request. Present only when at least one warning is returned.</p>
     *

     * @return null|WarningObjectCollection
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * <p>Identifier of the workflow run that produced this response.</p>
     *

     * @return null|string
     */
    public function getThreadId()
    {
        return $this->threadId;
    }

    /**
     * @param ?WarningObjectCollection $warnings
     * @return $this
     */
    public function withWarnings(?WarningObjectCollection $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * @param ?string $threadId
     * @return $this
     */
    public function withThreadId(?string $threadId)
    {
        $this->threadId = $threadId;

        return $this;
    }


    public function build(): AgentResponsesSuccess
    {
        return new AgentResponsesSuccessModel(
            $this->warnings,
            $this->threadId
        );
    }

    public static function of(): AgentResponsesSuccessBuilder
    {
        return new self();
    }
}
