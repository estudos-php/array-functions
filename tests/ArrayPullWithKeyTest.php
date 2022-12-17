<?php

use function LaracraftTech\array_pull_with_Key;

beforeEach(function () {
    $this->array = [
        'a' => 1,
        'b' => 2,
        'c' => [
            'd' => 3,
        ],
    ];

    $this->arrayOrg = $this->array;
});

it('pulls the value with its key', function () {
    $pull = array_pull_with_Key($this->array, 'a');
    expect($pull)->toEqual(['a' => 1]);
});

it('pulls the nested value with its key', function () {
    $pull = array_pull_with_Key($this->array, 'c.d');
    expect($pull)->toEqual(['c.d' => 3]);
});

it('removes the pulled key', function () {
    array_pull_with_Key($this->array, 'a');

    unset($this->arrayOrg['a']);
    expect($this->array)->toEqual($this->arrayOrg);
});
