<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObjectModel;

final class ReviewSetAuthorNameActionModel extends JsonObjectModel implements ReviewSetAuthorNameAction
{
    const DISCRIMINATOR_VALUE = 'setAuthorName';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $authorName;

    public function __construct(
        string $action = null,
        string $authorName = null
    ) {
        $this->action = $action;
        $this->authorName = $authorName;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getAuthorName()
    {
        if (is_null($this->authorName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewSetAuthorNameAction::FIELD_AUTHOR_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->authorName = (string) $data;
        }

        return $this->authorName;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }
}
