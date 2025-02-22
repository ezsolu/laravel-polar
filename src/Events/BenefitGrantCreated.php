<?php

namespace Danestves\LaravelPolar\Events;

use Danestves\LaravelPolar\Contracts\Billable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final class BenefitGrantCreated
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        /**
         * The billable entity.
         */
        public Billable $billable,
        /**
         * The payload array.
         *
         * @var array<string, mixed>
         */
        public array $payload
    ) {}
}
