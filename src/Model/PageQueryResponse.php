<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class PageQueryResponse extends JsonObject {
    protected $count;
    protected $total;
    protected $offset;
    protected $results;

    /**
     * @return int
     */
    public function getCount(): int
    {
        if (is_null($this->count)) {
            $value = $this->raw('count');
            if (!is_null($value)) {
                $this->count = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->count;
    }
                

    /**
     * @return int
     */
    public function getTotal(): int
    {
        if (is_null($this->total)) {
            $value = $this->raw('total');
            if (!is_null($value)) {
                $this->total = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->total;
    }
                

    /**
     * @return int
     */
    public function getOffset(): int
    {
        if (is_null($this->offset)) {
            $value = $this->raw('offset');
            if (!is_null($value)) {
                $this->offset = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->offset;
    }
                

    /**
     * @return array
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = $value;
            } else {
                return [];
            }
        }
        return $this->results;
    }
                
}
