<script src="{{ asset('admin-panel/assets/js/jquery.validate.min.js') }}"></script>
<script>
    function jqueryValidation(rules, messages) {
        $('#validation-form').validate({
            rules : rules,
            messages: messages,
        });
    }

</script>