@if (empty($_COOKIE[config('cookiewall.cookie_name')]))
<script>
    function cookiewall() {
        var d = new Date();
        d.setTime(d.getTime() + ({{ config('cookiewall.cookie_expires') }}*24*60*60*1000));
        document.cookie = '{{ config('cookiewall.cookie_name') }}=1;expires='+d.toUTCString()+';path=/';
        document.location = document.location;
    }
</script>
<div class="cookiewall-container">
    <div class="cookiewall-explain">
        {{ trans('cookiewall::cookiewall.explain') }}
    </div>
    <a href="javascript:cookiewall()" class="cookiewall-button cookiewall-button-accept">{{ trans('cookiewall::cookiewall.accept') }}</a><a href="{{ config('cookiewall.link_moreinfo') }}" class="cookiewall-button cookiewall-button-moreinfo">{{ trans('cookiewall::cookiewall.moreinfo') }}</a>
</div>
@endif
