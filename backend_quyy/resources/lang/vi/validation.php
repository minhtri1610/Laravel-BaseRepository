<?php

return [
    'accepted' => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không phải là một URL hợp lệ.',
    'after' => ':attribute phải là một ngày sau ngày :date.',
    'after_or_equal' => ':attribute phải là một ngày sau hoặc đúng bằng ngày :date.',
    'alpha' => ':attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash' => ':attribute chỉ có thể chứa chữ cái, số, dấu gạch ngang và gạch dưới.',
    'alpha_num' => ':attribute chỉ có thể chứa chữ cái và số.',
    'array' => ':attribute phải là một mảng.',
    'before' => ':attribute phải là một ngày trước ngày :date.',
    'before_or_equal' => ':attribute phải là một ngày trước hoặc đúng bằng ngày :date.',
    'between' => [
        'numeric' => ':attribute phải nằm trong khoảng từ :min đến :max.',
        'file' => ':attribute phải có dung lượng từ :min đến :max kilobyte.',
        'string' => ':attribute phải có độ dài từ :min đến :max ký tự.',
        'array' => ':attribute phải có từ :min đến :max phần tử.',
    ],
    'boolean' => 'Trường :attribute phải là đúng hoặc sai.',
    'confirmed' => ':attribute xác nhận không khớp.',
    'date' => ':attribute không phải là ngày hợp lệ.',
    'date_equals' => ':attribute phải là một ngày đúng bằng :date.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'different' => ':attribute và :other phải khác nhau.',
    'digits' => ':attribute phải có :digits chữ số.',
    'digits_between' => ':attribute phải có từ :min đến :max chữ số.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => ':attribute phải là địa chỉ email hợp lệ.',
    'ends_with' => ':attribute phải kết thúc bằng một trong các giá trị: :values.',
    'exists' => ':attribute đã chọn không hợp lệ.',
    'file' => ':attribute phải là một tệp tin.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'gt' => [
        'numeric' => ':attribute phải lớn hơn :value.',
        'file' => ':attribute phải lớn hơn :value kilobyte.',
        'string' => ':attribute phải dài hơn :value ký tự.',
        'array' => ':attribute phải có nhiều hơn :value phần tử.',
    ],
    'gte' => [
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'string' => ':attribute phải có ít nhất :value ký tự.',
        'array' => ':attribute phải có từ :value phần tử trở lên.',
    ],
    'image' => ':attribute phải là một hình ảnh.',
    'in' => ':attribute đã chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => ':attribute phải là một số nguyên.',
    'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4' => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6' => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'file' => ':attribute phải nhỏ hơn :value kilobyte.',
        'string' => ':attribute phải ngắn hơn :value ký tự.',
        'array' => ':attribute phải có ít hơn :value phần tử.',
    ],
    'lte' => [
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobyte.',
        'string' => ':attribute không được dài hơn :value ký tự.',
        'array' => ':attribute không được có nhiều hơn :value phần tử.',
    ],
    'max' => [
        'numeric' => ':attribute không được lớn hơn :max.',
        'file' => ':attribute không được lớn hơn :max kilobyte.',
        'string' => ':attribute không được dài hơn :max ký tự.',
        'array' => ':attribute không được có nhiều hơn :max phần tử.',
    ],
    'mimes' => ':attribute phải là một tệp tin thuộc loại: :values.',
    'mimetypes' => ':attribute phải là một tệp tin thuộc loại: :values.',
    'min' => [
        'numeric' => ':attribute phải ít nhất là :min.',
        'file' => ':attribute phải có dung lượng ít nhất là :min kilobyte.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
        'array' => ':attribute phải có ít nhất :min phần tử.',
    ],
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'not_regex' => ':attribute có định dạng không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'password' => 'Mật khẩu không chính xác.',
    'present' => 'Trường :attribute phải có mặt.',
    'regex' => ':attribute có định dạng không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi :values có mặt.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi tất cả :values có mặt.',
    'required_without' => 'Trường :attribute là bắt buộc khi :values không có mặt.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có :values nào có mặt.',
    'same' => ':attribute và :other phải khớp.',
    'size' => [
        'numeric' => ':attribute phải là :size.',
        'file' => ':attribute phải có dung lượng :size kilobyte.',
        'string' => ':attribute phải có :size ký tự.',
        'array' => ':attribute phải chứa :size phần tử.',
    ],
    'starts_with' => ':attribute phải bắt đầu bằng một trong các giá trị: :values.',
    'string' => ':attribute phải là một chuỗi ký tự.',
    'timezone' => ':attribute phải là một múi giờ hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => ':attribute tải lên không thành công.',
    'url' => ':attribute không phải là định dạng URL hợp lệ.',
    'uuid' => ':attribute phải là một UUID hợp lệ.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Thông báo tùy chỉnh',
        ],
    ],

    'attributes' => [],
];
