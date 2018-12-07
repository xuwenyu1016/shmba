$(function () {
    $('#container1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "院校比例",
            colorByPoint: true,
            data: [{
                name: "专科",
                y: 17.20
            }, {
                name: "985/211",
                y: 21.34,
                sliced: true,
                selected: true
            },{
                name: "普本",
                y: 61.46
            }]
        }]
    });
});

$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent'
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '专科',
                '985、211',
                '普通本科'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '院校比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '院校比例',
            data: [17.20, 21.34, 61.46]

        }]
    });
});


$(function () {
    $('#container3').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 350
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "专业比例",
            colorByPoint: true,
            data: [{
                name: "工科",
                y: 38.66
            }, {
                name: "商科",
                y: 12.07,
                sliced: true,
                selected: true
            },{
                name: "文科",
                y: 22.68
            },{
                name: "理科",
                y: 21.17
            },{
                name: "其他",
                y: 5.42
            }]
        }]
    });
});

$(function () {
    $('#container4').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent'
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '工科',
                '商科',
                '文科',
                '理科',
                '其他'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '专业比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '院校比例',
            data: [38.66, 12.07, 22.68, 21.17, 5.42]

        }]
    });
});


$(function () {
    $('#container5').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 300
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "学历比例",
            colorByPoint: true,
            data: [{
                name: "博士",
                y: 0.23
            }, {
                name: "硕士",
                y: 3.85,
                sliced: true,
                selected: true
            },{
                name: "本科",
                y: 78.6
            },{
                name: "专科",
                y: 17.32
            }
            ]
        }]
    });
});

$(function () {
    $('#container6').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '博士',
                '硕士',
                '本科',
                '专科'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '学历比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '学历比例',
            data: [0.23, 3.85, 78.6, 17.32]

        }]
    });
});


$(function () {
    $('#container7').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "公司性质比例",
            colorByPoint: true,
            data: [{
                name: "外资/合资企业",
                y: 37.03,
                sliced: true,
                selected: true
            }, {
                name: "自主创业",
                y: 4.43
            }, {
                name: "国有企业",
                y: 20.64
            },{
                name: "政府机构",
                y: 2.27
            },{
                name: "事业单位",
                y: 3.32
            },{
                name: "民营企业",
                y: 27.81
            },{
                name: "其他",
                y: 4.49
            }
            ]
        }]
    });
});

$(function () {
    $('#container8').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '外资/合资企业',
                '自主创业',
                '国有企业',
                '民营企业',
                '政府机构',
                '事业单位',
                '其他'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '公司性质比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '公司性质比例',
            data: [37.03, 4.43, 20.64, 27.81, 2.27, 3.32, 4.49]

        }]
    });
});


$(function () {
    $('#container9').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "行业类别比例",
            colorByPoint: true,
            data: [{
                name: "金融服务",
                y: 25.66,
                sliced: true,
                selected: true
            }, {
                name: "咨询",
                y: 2.97
            }, {
                name: "能源/化工",
                y: 7.17
            },{
                name: "科技/新媒体/电信",
                y: 24.9
            },{
                name: "非营利组织/政府机构/事业单位",
                y: 5.89
            },{
                name: "制造业",
                y: 18.19
            },{
                name: "批发/零售/贸易",
                y: 2.86
            },{
                name: "医药/保健/生物科技",
                y: 3.56
            },{
                name: "媒体/娱乐/广告",
                y: 2.33
            },{
                name: "其他",
                y: 6.47
            }
            ]
        }]
    });
});

$(function () {
    $('#container10').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '金融服务',
                '咨询',
                '能源/化工',
                '科技/新媒体/电信',
                '非营利组织/政府机构/事业单位',
                '制造业',
                '批发/零售/贸易',
                '医药/保健/生物科技',
                '媒体/娱乐/广告',
                '其他'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '行业类别比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '行业类别比例',
            data: [25.66, 2.97, 7.17, 24.9, 5.89, 18.19, 2.86, 3.56, 2.33, 6.47]

        }]
    });
});


$(function () {
    $('#container11').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "工作职能比例",
            colorByPoint: true,
            data: [{
                name: "金融/财务",
                y: 23.03,
                sliced: true,
                selected: true
            }, {
                name: "战略/业务发展",
                y: 4.26
            }, {
                name: "综合管理",
                y: 20.87
            },{
                name: "政府公务员 ",
                y: 1.81
            },{
                name: "销售/客户管理",
                y: 7.17
            },{
                name: "项目管理 ",
                y: 17.32
            },{
                name: "市场营销/产品管理",
                y: 6.41
            },{
                name: "供应链管理 ",
                y: 2.51
            },{
                name: "人事/行政 ",
                y: 2.39
            },{
                name: "技术研发",
                y: 11.25
            },{
                name: " 其他",
                y: 2.97
            }
            ]
        }]
    });
});

$(function () {
    $('#container12').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '金融/财务',
                '咨询/战略/业务发展',
                '综合管理',
                '政府公务员',
                '销售/客户管理',
                '项目管理',
                '市场营销/产品管理',
                '供应链管理',
                '人事/行政',
                '技术研发',
                '其他'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '工作职能比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '工作职能比例',
            data: [23.03, 4.26, 20.87, 1.81, 7.17, 17.32, 6.41, 2.51, 2.39, 11.25, 2.97]

        }]
    });
});


$(function () {
    $('#container13').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "职位类型比例",
            colorByPoint: true,
            data: [{
                name: "高层管理(副总以上级)",
                y: 7.06,
                sliced: true,
                selected: true
            }, {
                name: "高级管理(总助级)",
                y: 12.77
            }, {
                name: "中级管理(总监/经理)",
                y: 18.19
            },{
                name: "初级管理",
                y: 24.02
            },{
                name: "高级专业人士",
                y: 12.24
            },{
                name: "初级专业人士 ",
                y: 19.24
            },{
                name: "管理培训生",
                y: 1.87
            },{
                name: " 其他",
                y: 4.61
            }
            ]
        }]
    });
});

$(function () {
    $('#container14').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '高层管理(副总经理以上级)',
                '高级管理(总助/执行总监级)',
                '中级管理(总监/部门经理)',
                '初级管理(主管级/一般经理级)',
                '高级专业人士',
                '初级专业人士',
                '管理培训生',
                '其他'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '职位类型比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '职位类型比例',
            data: [7.06, 12.77, 18.19, 24.02, 12.24, 19.24, 1.87, 4.61]

        }]
    });
});


$(function () {
    $('#container15').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "下属人数比例",
            colorByPoint: true,
            data: [{
                name: "0-3人",
                y: 57.90,
                sliced: true,
                selected: true
            }, {
                name: "4-6人",
                y: 12.3
            }, {
                name: "7-10人",
                y: 9.74
            },{
                name: "11-20人",
                y: 7.99
            },{
                name: "21-30人",
                y: 6.82
            },{
                name: "31-40人",
                y: 1.87
            },{
                name: "41人以上",
                y: 3.38
            }
            ]
        }]
    });
});

$(function () {
    $('#container16').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '0-3人',
                '4-6人',
                '7-10人',
                '11-20人',
                '21-30人',
                '31-40人',
                '41人以上'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '下属人数比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '下属人数比例',
            data: [57.90, 12.3, 9.74, 7.99, 6.82, 1.87, 3.38]

        }]
    });
});


$(function () {
    $('#container17').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "从事管理工作岗位经验比例",
            colorByPoint: true,
            data: [{
                name: "0-1年",
                y: 16.09,
                sliced: true,
                selected: true
            }, {
                name: "2-3年",
                y: 25.25
            }, {
                name: "4-5年",
                y: 24.72
            },{
                name: "6-7年",
                y: 11.84
            },{
                name: "8-9年",
                y: 7.99
            },{
                name: "10年以上",
                y: 14.11
            }
            ]
        }]
    });
});

$(function () {
    $('#container18').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '0-1年',
                '2-3年',
                '4-5年',
                '6-7年',
                '8-9年',
                '10年以上'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '从事管理工作岗位经验比例 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '从事管理工作岗位经验比例',
            data: [16.09, 25.25, 24.72, 11.84, 7.99, 14.11]
        }]
    });
});


$(function () {
    $('#container19').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "自有房产",
            colorByPoint: true,
            data: [{
                name: "保密/0套",
                y: 25.71,
                sliced: true,
                selected: true
            }, {
                name: "1套",
                y: 59.53
            }, {
                name: "2套",
                y: 10.2
            },{
                name: "3套及以上",
                y: 4.55
            }
            ]
        }]
    });
});

$(function () {
    $('#container20').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '保密/0套',
                '1套',
                '2套',
                '3套及以上'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '自有房产 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '自有房产',
            data: [25.71, 59.53, 10.20, 4.55]
        }]
    });
});


$(function () {
    $('#container21').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "年收入",
            colorByPoint: true,
            data: [{
                name: "0-20万",
                y: 11.84,
                sliced: true,
                selected: true
            }, {
                name: "20-40万",
                y: 61.98
            }, {
                name: "40-100万",
                y: 11.78
            },{
                name: "100万以上",
                y: 4.55
            },{
                name: "保密",
                y: 9.85
            }
            ]
        }]
    });
});

$(function () {
    $('#container22').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '0-20万',
                '20-40万',
                '40-100万',
                '100万以上',
                '保密'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '年收入 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '年收入',
            data: [11.84, 61.98, 11.78, 4.55, 9.85]
        }]
    });
});


$(function () {
    $('#container23').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            backgroundColor:'transparent',
            width: 400
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "婚否",
            colorByPoint: true,
            data: [{
                name: "单身",
                y: 41.75,
                sliced: true,
                selected: true
            }, {
                name: "已婚",
                y: 40.99
            }, {
                name: "保密",
                y: 17.26
            }
            ]
        }]
    });
});

$(function () {
    $('#container24').highcharts({
        chart: {
            type: 'column',
            backgroundColor:'transparent',
        },
        title: {
            text: ''
        },
//            subtitle: {
//                text: 'Source: WorldClimate.com'
//            },
        xAxis: {
            categories: [
                '单身',
                '已婚',
                '保密'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '婚否 (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '婚否',
            data: [41.75, 40.99, 17.26]
        }]
    });
});