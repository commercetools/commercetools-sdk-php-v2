<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderEditSetCommentActionModel extends JsonObjectModel implements OrderEditSetCommentAction
{
    const DISCRIMINATOR_VALUE = 'setComment';
    public function __construct(
        string $action = null,
        string $comment = null
    ) {
        $this->action = $action;
        $this->comment = $comment;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $comment;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getComment()
    {
       if (is_null($this->comment)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditSetCommentAction::FIELD_COMMENT);
           if (is_null($data)) {
               return null;
           }
           $this->comment = (string)$data;
       }
       return $this->comment;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
    
}