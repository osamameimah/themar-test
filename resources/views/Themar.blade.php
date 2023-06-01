@extends('layouts.container')

@section('contain')
<!--  -->
<div>
    <div class="title">
        <h1>المشتريات</h1>
        <div class="title-inheret">
            <p>المشتريات > <span>إضافة مشروع</span></p>
        </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="containt">
        <p>الرجاء إكمال الخطوات التالية</p>
        <!--  -->
        <div class="stepper">

            <ul class="progressbar">
                <li class="active">معلومات الشراء</li>
                <li>معلومات مالية</li>
                <li>المستندات</li>
            </ul>

        </div>

        <!--  -->

        <form class="form">
            <div class="information">
                <p>معلومات الشراء</p>
                <span></span>
            </div>

            <div class="input-form">
                <label>نوع المشتريات</label>
                <input type="text" placeholder="نوع المشتريات" />
            </div>

            <div class="input-form">
                <label>عرض السعر</label>
                <div class="file">
                    <input type="file" class="upload-box" />
                </div>

                <div class="input-validate">
                    <img src="{{asset('assets/image/warning.svg')}}" />
                    <span>يجب أن يكون ملفك بصيغة pdf. ولا يزيد
                        حجمه
                        عن
                        10 ميغابايت</span>
                </div>
            </div>

            <div class="input-form">
                <label>مبلغ المشتريات بالريال السعودي</label>
                <input type="text" placeholder="مثال: 350,000" />
            </div>

            <div class="input-form">
                <label>فترة السداد بالأشهر</label>

                <div class="custom-select input-form">
                    <select>
                        <option value="">اختر فترة السداد</option>
                        <option value="option1">خيار 1 </option>
                        <option value="option2">خيار 2</option>
                        <option value="option3">خيار 3</option>
                    </select>
                    <span class="custom-select-arrow"></span>
                </div>
            </div>

            <div class="details">
                <div class="details-header">حاسبة القسط الشهري
                    التقريبية</div>
                <div class="details-info">
                    <div class="details-sum">
                        <div class="details-sum-info">
                            <span>مبلغ المشتريات</span>
                            <span>المرابحة</span>
                            <span>المبلغ الكلي</span>
                        </div>
                        <div class="details-info-sum-all">
                            <span> 0.00 ر.س</span>
                            <span> + 0.00 ر.س</span>
                            <span> = 0.00 ر.س</span>
                        </div>
                    </div>
                    <div class="conditions">
                        <div class="conditions-info">
                            <span>القسط الشهري</span>
                            <span>تطبيق الشروط والأحكام</span>
                        </div>
                        <div>
                            <span class="coin">0.00 ر.س</span>

                        </div>
                    </div>

                    <div class="conditions">
                        <div class="conditions-info">
                            <span>الرسوم الإدارية</span>
                            <span>تطبيق الشروط والأحكام</span>
                        </div>
                        <div class="coin">
                            <span>0.00 ر.س</span>

                        </div>
                    </div>

                </div>

            </div>

            <div class="information">
                <p>معلومات المورد </p>
                <span></span>
            </div>

            <div class="input-form">
                <label>اختر من الموردين</label>
                <div class="custom-select input-form">
                    <select>
                        <option value="">اختر من الموردين</option>
                        <option value="option1">خيار 1 </option>
                        <option value="option2">خيار 2</option>
                        <option value="option3">خيار 3</option>
                    </select>
                    <span class="custom-select-arrow"></span>
                </div>
            </div>

            <div class="det-info">
                <div class="img-operation">
                    <a href="#"> <img src="{{asset('assets/image/edit.svg')}}" />
                    </a>
                    <a href="#"> <img src="{{asset('assets/image/delete.svg')}}" />
                    </a>
                </div>
                <div class="card">
                    <div>بيانات المورد </div>
                    <div class="card-header">
                        <div>
                            <span>اسم المنشأة الموردة</span>
                            <span>خديجة محمد</span>
                        </div>
                        <div>
                            <span>اسم المسؤول </span>
                            <span>خديجة محمد</span>
                        </div>
                        <div>
                            <span>القطاع </span>
                            <span>خديجة محمد</span>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="card-body">
                    <div>بيانات التواصل</div>
                    <div class="containtas">
                        <div>
                            <img src="{{asset('assets/image/call.svg')}}" />
                            <span>+966 7655 6666</span>
                        </div>
                        <div>
                            <img src="{{asset('assets/image/email.svg')}}" />
                            <span>khadija-ahmed@gmail.com</span>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="card-footer">
                    <div><span>المرفقات</span></div>
                    <a href="#" class="file-pdf">
                        <img src="{{asset('assets/image/file.svg')}}" />
                        <span class="ii">شهادة الحساب البنكي
                            للمورد.</span>
                    </a>
                </div>

            </div>
            <div class="submit">
                <button type="submit" class="next">
                    التالي
                    <img src="{{asset('assets/image/next.svg')}}" />
                </button>

            </div>
        </form>
    </div>
</div>
<!--  -->

<div class="footer">
    <div class="Connect-footer">
        <div class="Connect-us">
            <span>اتصل بنا</span>
            <span>info@themar.sa</span>
            <span>850-015-5418</span>
        </div>
        <div class="connect-social">
            <a href="#"><img src="{{asset('assets/image/facebook.svg')}}" /></a>
            <a href="#"><img src="{{asset('assets/image/twitter.svg')}}" /></a>
            <a href="#"> <img src="{{asset('assets/image/youtube.svg')}}" /></a>
            <a href="#"><img src="{{asset('assets/image/instagram.svg')}}" /></a>
            <a href="#"><img src="{{asset('assets/image/linkin.svg')}}" /></a>

        </div>

    </div>
    <div class="text-footer">
        <p>تنويه المسؤولية</p>
        <p>طورت لوا أحد أفضل فرق وتقنيات التحليل الإئتماني في
            المنطقة، ونستخدم هذه التقنيات من أجل مساعدة
            المستثمرين
            على اتخاذ القرارات الاستثمارية
            التي تناسبهم عبر العلامات الائتمانية المفصلة لكل
            قرض.
            ورت لوا أحد أفضل فرق وتقنيات التحليل الإئتماني في
            المنطقة، ونستخدم هذه التقنيات من
            التحليل الإئتماني في المنطقة، ونستخدم هذه التقنيات
            من
            أجل مساعدة المستثمرين على اتخاذ القرارات الاستثمارية
            التي تناسبهم عبر العلامات الائتمانية
            أجل مساعدة المستثمرين على اتخاذ القرارات الاستثمارية
            التي تناسبهم عبر العلامات الائتمانية المفصلة لكل
            قرض.
            ورت لوا أحد أفضل فرق وتقنيات
            المفصلة لكل قرض. </p>
    </div>

    <div class="policy">
        <p>© حقوق الطبع والنشر 2020. - جميع الحقوق محفوظة لشركة
            ثمار
            طور بواسطة EDESIGN.</p>
        <div>
            <a href="#">الأسئلة الشائعة </a>
            <a href="#">سياسة الخصوصية</a>
        </div>

    </div>
</div>


@stop