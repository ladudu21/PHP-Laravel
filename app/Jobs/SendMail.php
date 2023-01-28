<?php

namespace App\Jobs;

use App\Http\Services\CartService;
use App\Mail\OrderShipped;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $name;
    public $email;
    public $products;
    public $carts;

    public function __construct($name, $email, $products, $carts)
    {   
        $this->name = $name;
        $this->email = $email;
        $this->products = $products;
        $this->carts = $carts;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        Mail::to($this->email)->send(new OrderShipped($this->name, $this->products, $this->carts));
    }
}
