<?php

namespace Modules\Icurrency\Repositories\Cache;

use Modules\Icurrency\Repositories\CurrencyRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCurrencyDecorator extends BaseCacheDecorator implements CurrencyRepository
{
    public function __construct(CurrencyRepository $currency)
    {
        parent::__construct();
        $this->entityName = 'icurrency.currencies';
        $this->repository = $currency;
    }
}
