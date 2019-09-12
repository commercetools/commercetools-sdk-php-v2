<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ImportSinkDraftModel extends JsonObjectModel implements ImportSinkDraft
{
    /**
     * @var ?Predicate
     */
    protected $skipPredicate;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $resourceType;

    public function __construct(
        Predicate $skipPredicate = null,
        string $key = null,
        string $resourceType = null
    ) {
        $this->skipPredicate = $skipPredicate;
        $this->key = $key;
        $this->resourceType = $resourceType;
    }

    /**
     * <p>A predicate allows to check the current state of a CTP resource. And can be used to detect if an import should
     * be performed or should be skipped. And this abstract type allows us to support different syntaxes for our predicates
     * without any breaking changes to our api.</p>.
     *
     * @return null|Predicate
     */
    public function getSkipPredicate()
    {
        if (is_null($this->skipPredicate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ImportSinkDraft::FIELD_SKIP_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $className = PredicateModel::resolveDiscriminatorClass($data);
            $this->skipPredicate = $className::of($data);
        }

        return $this->skipPredicate;
    }

    /**
     * <p>The key of import sink.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSinkDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The type of the import resource sent to this import sink.</p>.
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSinkDraft::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    public function setSkipPredicate(?Predicate $skipPredicate): void
    {
        $this->skipPredicate = $skipPredicate;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }
}
