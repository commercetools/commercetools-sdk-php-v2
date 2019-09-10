<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObjectModel;

final class ReviewSetTitleActionModel extends JsonObjectModel implements ReviewSetTitleAction
{
    const DISCRIMINATOR_VALUE = 'setTitle';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $title;

    public function __construct(
        string $action = null,
        string $title = null
    ) {
        $this->action = $action;
        $this->title = $title;
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
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewSetTitleAction::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
}
