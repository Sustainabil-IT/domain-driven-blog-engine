<?php

namespace Tests\Factories;

use App\Domain\Post\PostFactory as BaseFactory;

class PostFactory extends TestFactory
{
    public function __construct(BaseFactory $factory)
    {
        $this->factory = $factory;
    }

    protected function fakeData(array $data): array
    {
        return [
            'title' => 'Test Title'
        ];
    }
}
