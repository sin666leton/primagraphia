<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'accepted' => ':attribute harus disetujui.',
    'accepted_if' => ':attribute harus disetujui jika :other bernilai :value.',
    'active_url' => ':attribute harus berupa URL yang valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'any_of' => ':attribute tidak valid.',
    'array' => ':attribute harus berupa array.',
    'array_keys' => ':attribute hanya boleh memiliki key berikut: :values.',
    'ascii' => ':attribute hanya boleh berisi karakter alfanumerik dan simbol satu byte.',
    'base64' => ':attribute harus berupa string Base64 yang valid.',
    'before' => ':attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal sebelum atau sama dengan :date.',

    'between' => [
        'array' => ':attribute harus memiliki antara :min sampai :max item.',
        'file' => ':attribute harus berukuran antara :min sampai :max kilobyte.',
        'numeric' => ':attribute harus bernilai antara :min sampai :max.',
        'string' => ':attribute harus memiliki panjang antara :min sampai :max karakter.',
    ],

    'boolean' => ':attribute harus bernilai true atau false.',
    'can' => ':attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'contains' => ':attribute tidak memiliki nilai yang diwajibkan.',
    'current_password' => 'Kata sandi saat ini tidak sesuai.',
    'date' => ':attribute harus berupa tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute harus sesuai dengan format :format.',
    'decimal' => ':attribute harus memiliki :decimal angka di belakang koma.',
    'declined' => ':attribute harus ditolak.',
    'declined_if' => ':attribute harus ditolak jika :other bernilai :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus terdiri dari :digits digit.',
    'digits_between' => ':attribute harus terdiri dari :min sampai :max digit.',
    'dimensions' => 'Dimensi gambar :attribute tidak valid.',
    'distinct' => ':attribute memiliki nilai duplikat.',
    'doesnt_contain' => ':attribute tidak boleh mengandung salah satu dari nilai berikut: :values.',
    'doesnt_end_with' => ':attribute tidak boleh diakhiri dengan salah satu dari nilai berikut: :values.',
    'doesnt_start_with' => ':attribute tidak boleh diawali dengan salah satu dari nilai berikut: :values.',
    'email' => ':attribute harus berupa alamat email yang valid.',
    'encoding' => ':attribute harus menggunakan encoding :encoding.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu dari nilai berikut: :values.',
    'enum' => 'Pilihan :attribute tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'extensions' => ':attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute wajib memiliki nilai.',

    'gt' => [
        'array' => ':attribute harus memiliki lebih dari :value item.',
        'file' => ':attribute harus berukuran lebih dari :value kilobyte.',
        'numeric' => ':attribute harus lebih besar dari :value.',
        'string' => ':attribute harus memiliki lebih dari :value karakter.',
    ],

    'gte' => [
        'array' => ':attribute harus memiliki minimal :value item.',
        'file' => ':attribute harus berukuran lebih dari atau sama dengan :value kilobyte.',
        'numeric' => ':attribute harus lebih besar dari atau sama dengan :value.',
        'string' => ':attribute harus memiliki minimal :value karakter.',
    ],

    'hex_color' => ':attribute harus berupa kode warna heksadesimal yang valid.',
    'image' => ':attribute harus berupa gambar.',
    'in' => 'Pilihan :attribute tidak valid.',
    'in_array' => ':attribute harus terdapat dalam :other.',
    'in_array_keys' => ':attribute harus memiliki minimal salah satu key berikut: :values.',
    'integer' => ':attribute harus berupa bilangan bulat.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa string JSON yang valid.',
    'list' => ':attribute harus berupa daftar.',
    'lowercase' => ':attribute harus menggunakan huruf kecil.',

    'lt' => [
        'array' => ':attribute harus memiliki kurang dari :value item.',
        'file' => ':attribute harus berukuran kurang dari :value kilobyte.',
        'numeric' => ':attribute harus kurang dari :value.',
        'string' => ':attribute harus memiliki kurang dari :value karakter.',
    ],

    'lte' => [
        'array' => ':attribute tidak boleh memiliki lebih dari :value item.',
        'file' => ':attribute harus berukuran kurang dari atau sama dengan :value kilobyte.',
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'string' => ':attribute tidak boleh memiliki lebih dari :value karakter.',
    ],

    'mac_address' => ':attribute harus berupa alamat MAC yang valid.',

    'max' => [
        'array' => ':attribute tidak boleh memiliki lebih dari :max item.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'string' => ':attribute tidak boleh lebih dari :max karakter.',
    ],

    'max_digits' => ':attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',

    'min' => [
        'array' => ':attribute harus memiliki minimal :min item.',
        'file' => ':attribute harus berukuran minimal :min kilobyte.',
        'numeric' => ':attribute harus minimal :min.',
        'string' => ':attribute harus memiliki minimal :min karakter.',
    ],

    'min_digits' => ':attribute harus memiliki minimal :min digit.',
    'missing' => ':attribute harus tidak tersedia.',
    'missing_if' => ':attribute harus tidak tersedia jika :other bernilai :value.',
    'missing_unless' => ':attribute harus tidak tersedia kecuali jika :other bernilai :value.',
    'missing_with' => ':attribute harus tidak tersedia jika :values tersedia.',
    'missing_with_all' => ':attribute harus tidak tersedia jika semua :values tersedia.',
    'multiple_of' => ':attribute harus merupakan kelipatan dari :value.',
    'not_in' => 'Pilihan :attribute tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',

    'password' => [
        'letters' => ':attribute harus mengandung minimal satu huruf.',
        'mixed' => ':attribute harus mengandung minimal satu huruf besar dan satu huruf kecil.',
        'numbers' => ':attribute harus mengandung minimal satu angka.',
        'symbols' => ':attribute harus mengandung minimal satu simbol.',
        'uncompromised' => ':attribute ditemukan dalam kebocoran data. Silakan gunakan :attribute yang berbeda.',
    ],

    'present' => ':attribute wajib tersedia.',
    'present_if' => ':attribute wajib tersedia jika :other bernilai :value.',
    'present_unless' => ':attribute wajib tersedia kecuali jika :other bernilai :value.',
    'present_with' => ':attribute wajib tersedia jika :values tersedia.',
    'present_with_all' => ':attribute wajib tersedia jika semua :values tersedia.',
    'prohibited' => ':attribute tidak diperbolehkan.',
    'prohibited_if' => ':attribute tidak diperbolehkan jika :other bernilai :value.',
    'prohibited_if_accepted' => ':attribute tidak diperbolehkan jika :other disetujui.',
    'prohibited_if_declined' => ':attribute tidak diperbolehkan jika :other ditolak.',
    'prohibited_unless' => ':attribute tidak diperbolehkan kecuali jika :other memiliki salah satu nilai berikut: :values.',
    'prohibits' => ':attribute melarang :other untuk diisi.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => ':attribute wajib diisi.',
    'required_array_keys' => ':attribute harus memiliki key berikut: :values.',
    'required_if' => ':attribute wajib diisi jika :other bernilai :value.',
    'required_if_accepted' => ':attribute wajib diisi jika :other disetujui.',
    'required_if_declined' => ':attribute wajib diisi jika :other ditolak.',
    'required_unless' => ':attribute wajib diisi kecuali jika :other memiliki salah satu nilai berikut: :values.',
    'required_with' => ':attribute wajib diisi jika :values tersedia.',
    'required_with_all' => ':attribute wajib diisi jika semua :values tersedia.',
    'required_without' => ':attribute wajib diisi jika :values tidak tersedia.',
    'required_without_all' => ':attribute wajib diisi jika tidak satu pun dari :values tersedia.',
    'same' => ':attribute harus sama dengan :other.',

    'size' => [
        'array' => ':attribute harus memiliki :size item.',
        'file' => ':attribute harus berukuran :size kilobyte.',
        'numeric' => ':attribute harus bernilai :size.',
        'string' => ':attribute harus memiliki :size karakter.',
    ],

    'starts_with' => ':attribute harus diawali dengan salah satu dari nilai berikut: :values.',
    'string' => ':attribute harus berupa teks.',
    'timezone' => ':attribute harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal diunggah.',
    'uppercase' => ':attribute harus menggunakan huruf kapital.',
    'url' => ':attribute harus berupa URL yang valid.',
    'ulid' => ':attribute harus berupa ULID yang valid.',
    'uuid' => ':attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Pesan validasi khusus.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'name' => 'nama',
        'email' => 'email',
        'password' => 'kata sandi',
        'username' => 'nama pengguna',
        'phone' => 'nomor telepon',
        'address' => 'alamat',
        'date' => 'tanggal',
        'file' => 'file',
        'image' => 'gambar',
    ],

];
