<?php

return [
    'alipay' => [
        'app_id'         => '2016101600700950',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnkqgipf3sHd6OndtwFS7FynVJqVcD4pN0elUlOrYu+ZRYaqW77il6Udc0PcquoECBWV5yNhZHWs3KXgyMB640xm04p+KzRYyX2a36Y6VH47sWCgV+xDVkpymEl+2jnRIEEFgzf6rFnpr89niAHgV3YFHWxLkVDlbbktp3kbB8jlPoL7FbcmDssdvmWTFMlAFZCmS1cgXk/NEPMEJxI7FA8kr4YWaSXuJrt4Wyoj8dEUmNAXihjWbZT/9JX04+FiWd4yl8HKz740E1lyzkztaHr9Ura8pJyVDBBEHSO1wRCQNRM9w9+aYndckMIDLHPHDKdmpW0DaJ4MDHNKglVHUXwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAnkqgipf3sHd6OndtwFS7FynVJqVcD4pN0elUlOrYu+ZRYaqW77il6Udc0PcquoECBWV5yNhZHWs3KXgyMB640xm04p+KzRYyX2a36Y6VH47sWCgV+xDVkpymEl+2jnRIEEFgzf6rFnpr89niAHgV3YFHWxLkVDlbbktp3kbB8jlPoL7FbcmDssdvmWTFMlAFZCmS1cgXk/NEPMEJxI7FA8kr4YWaSXuJrt4Wyoj8dEUmNAXihjWbZT/9JX04+FiWd4yl8HKz740E1lyzkztaHr9Ura8pJyVDBBEHSO1wRCQNRM9w9+aYndckMIDLHPHDKdmpW0DaJ4MDHNKglVHUXwIDAQABAoIBAEQLOG/bW7IT6grwA9HFmpceeG4gby6O+VzevGk3eutq2ljth+yMp2VcM93wIgICKug+8tcPiV9IE3JUJN7ilfjI+CTjCDuY6xZvhWd0z029loNe1/QRDH31sL39PvCFs+So9gAXFVyYS4eLhcdF18BcLlxMBrLd5RvIdz4BlKWWqD6J+vtoejfQ6UGbjioP+aM4xRVmR1kbiEszchroA1l2Z5pSaSAmb4eKQDuijsIGv4pKVtzE/u//U+dj/4OQlRWiCIEdo+fTXgtYO20qriftMwcEa4n9XA7gfMRPnL+Qlx3rZoHVplZz0mdZQBZsvqzs+ZpUaIBZW1CRXyEyXCECgYEAyfDv6pzxjyi0WpKnyOUFgFfNrL1itPTCyJ0sADkw8z9DHG9BkeyjbqYM0Jj0DPkZ3RUuH5Btxvrm6PlGlnUUli/fP3I/092QE5zr4UfKSve2IC1mDGe3/pWXogd3uO7ynuDEX+pkBsrIl1FO6IT8ycOCwAUb30ANHm9lwx0btr0CgYEAyKpfNzyMTMo8p5hzWKXaIkwzZ3mYxlSTqg0smOFPg5sSIuwfb2LrFQ4uSonPSfJErcJR2DIMDtFf1yfjjYs5mYDvBpPzqBSvNoQBpMYrkVPuiPjkzfWdHoStjvCU7fi2E9xxF4xBLYCsHJmXX9De3VLle3Zd8sFZzJj0e5jWp0sCgYEAsag96XFZMlDlGimbYqnZRSf50dZrWDdchZGAfFHUNquZJxLZ5L8CqP18mKd3TVJ45n8TrMErUrq5GozzBLrL+bTz+qVQcduiPR74haDa30k9+OD3vkIhJOAGHo3jTdcpq4yiNp/GkBMmlbj6aqVUn0xZYwUbmDSJVhU6uYSKNSECgYADRSOAFvCCX9lVMdrPWwSPAobj7MtckAxH/Sb45tMQ5foJr6djfU0vbqe6dzx1jAkqe7wxtb8UjrztGK1QpTAvHDbI+KhD2PJyBPyx3rjfCWsduFCiOppw4OCjL7B9oEv3TuRY6eQ2BZ7IaIha+2BmYu9yb59gUV5RQzzYtsjouQKBgQCyeXSPTLy6c2Z2PEculEGPxY1TPff7MRun6qlmYVu6S3gPKI7k6sUNCG9Za0UCtO2MC4dGZg2GkZuJDTTLZ/R7KAu8JykKkDmMj0qsakbUBKUHe3Uhk8jNjsvmwjpkBdJUbj3rF0jIRsfiBHsBYQZ87oIfZ3PTqQParWpFL9e1pA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
