<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSetSearchKeywordsActionModel extends JsonObjectModel implements ProductSetSearchKeywordsAction
{
    public const DISCRIMINATOR_VALUE = 'setSearchKeywords';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchKeywords $searchKeywords = null,
        ?bool $staged = null,
        ?string $action = null
    ) {
        $this->searchKeywords = $searchKeywords;
        $this->staged = $staged;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.</p>
     *
     *
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SEARCH_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->searchKeywords = SearchKeywordsModel::of($data);
        }

        return $this->searchKeywords;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>searchKeywords</code> is updated. If <code>false</code>, both the current and staged <code>searchKeywords</code> are updated.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
