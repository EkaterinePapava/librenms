<?php

return [
    'groups' => [
        'updated' => ':port: ჯგუფი განახლდა',
        'none' => ':port განახლება მოთხოვნილი არ იყო',
    ],
    'filters' => [
        'status_up' => 'მხოლოდ ჩართულების ჩვნეება',
        'admin_down' => 'ადმინ. გათიშულების ჩვენება',
        'disabled' => 'გამორთულების ჩვენება',
        'ignored' => 'გამოტოვებულების ჩვენება',
    ],
    'graphs' => [
        'bits' => 'ბიტი',
        'upkts' => 'ერთმხრივი გადაცემის პაკეტები',
        'nupkts' => 'არა-ერთმხრივი გადაცემის პაკეტები',
        'errors' => 'შეცდომები',
        'etherlike' => 'Etherlike',
    ],
    'mtu_label' => 'MTU :mtu',
    'tabs' => [
        'arp' => 'ARP ცხრილი',
        'nd' => 'IPv6 ND',
        'fdb' => 'FDB ცხრილი',
        'links' => 'მეზობლები',
        'transceivers' => 'ტრანსივერები',
        'xdsl' => 'xDSL',
    ],
    'transceiver' => 'ტრანსივერი',
    'transceivers' => [
        'fields' => [
            'model' => 'PN: :model',
            'serial' => 'SN: :serial',
            'revision' => 'Rev: :revision',
            'date' => 'თარიღი: :date',
            'distance' => 'მანძილი: :distance',
            'encoding' => 'კოდირება: :encoding',
            'cable' => 'კაბელი: :cable',
            'ddm' => 'DDM: :ddm',
            'wavelength' => 'ტალღის სიგრძე: :wavelength',
            'connector' => 'კონექტორი: :connector',
            'channels' => 'არხები: :channels',
        ],
        'metrics' => [
            'power-tx' => 'Tx სიმძლავრე|არხი :channel Tx სიმძლავრე',
            'power-rx' => 'Rx სიმძლავრე|არხი :channel Rx სიმძლავრე',
            'bias' => 'Bias|არხი :channel Bias',
            'temperature' => 'ტემპერატურა|არხი :channel ტემპერატურა',
            'voltage' => 'ვოლტაჟი|არხი :channel ვოლტაჟი',
        ],
        'units' => [
            'power-tx' => 'დბმ',
            'power-rx' => 'დბმ',
            'bias' => 'მა',
            'temperature' => '°C',
            'voltage' => 'ვ',
        ],
    ],
    'unknown_port' => 'უცნობი პორტი',
    'vlan_count' => 'VLAN-ები: :count',
    'vlan_label' => 'VLAN: :label',
    'vrf_label' => 'VRF: :name',
    'xdsl' => [
        'sync_stat' => 'სინქრ: :down/:up',
        'attainable_stat' => 'მაქს: :down/:up',
        'attenuation_stat' => 'ატენ: :down/:up',
        'snr_stat' => 'SNR: :down/:up',
        'sync' => 'სინქრ. სიჩქარე',
        'attainable' => 'მიღწევადი სიჩქარე',
        'attenuation' => 'ატენუაცია',
        'snr' => 'SNR ზღვარი',
        'power' => 'გამომავალი სიმძლავრე',
    ],
];
