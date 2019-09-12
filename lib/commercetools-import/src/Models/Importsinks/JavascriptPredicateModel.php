<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObjectModel;

final class JavascriptPredicateModel extends JsonObjectModel implements JavascriptPredicate
{
    const DISCRIMINATOR_VALUE = 'javascript';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $expression;

    public function __construct(
        string $type = null,
        string $expression = null
    ) {
        $this->type = $type;
        $this->expression = $expression;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Predicate::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>A javscript boolean expression.</p>.
     *
     * @return null|string
     */
    public function getExpression()
    {
        if (is_null($this->expression)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(JavascriptPredicate::FIELD_EXPRESSION);
            if (is_null($data)) {
                return null;
            }
            $this->expression = (string) $data;
        }

        return $this->expression;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setExpression(?string $expression): void
    {
        $this->expression = $expression;
    }
}
