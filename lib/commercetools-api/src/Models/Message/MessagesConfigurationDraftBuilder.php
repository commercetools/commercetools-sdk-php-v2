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
 * @implements Builder<MessagesConfigurationDraft>
 */
final class MessagesConfigurationDraftBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $enabled;

    /**

     * @var ?int
     */
    private $deleteDaysAfterCreation;

    /**
     * <p>Setting to <code>true</code> activates the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *

     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * <p>Specifies the number of days each Message should be available via the <a href="/../api/projects/messages">Messages Query</a> API. For Messages older than the specified period, it is not guaranteed that they are still accessible via the API.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        return $this->deleteDaysAfterCreation;
    }

    /**
     * @param ?bool $enabled
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @param ?int $deleteDaysAfterCreation
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

        return $this;
    }


    public function build(): MessagesConfigurationDraft
    {
        return new MessagesConfigurationDraftModel(
            $this->enabled,
            $this->deleteDaysAfterCreation
        );
    }

    public static function of(): MessagesConfigurationDraftBuilder
    {
        return new self();
    }
}
