<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function getForDataTable(array $params): array
    {
        $query = User::query();

        $totalRecords = $query->count();

        $query->search($params['search'] ?? null);

        $filteredRecords = $query->count();

        $users = $query->skip($params['start'] ?? 0)
                       ->take($params['length'] ?? 10)
                       ->get();

        return [
            'draw'            => intval($params['draw'] ?? 1),
            'recordsTotal'    => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data'            => $users,
        ];
    }

    public function create(array $data): User
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
