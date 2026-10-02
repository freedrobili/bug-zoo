<x-zoo.exhibit :bug="$bug">
    <form class="form-stack" id="couponForm" action="#" method="get">
        <p class="price-line">3 × 19,99 ₽ = 59,97 ₽</p>
        <label class="field">
            <span>Купон</span>
            <input class="input" id="coupon" name="coupon" value="TENOFF" readonly>
        </label>
        <button type="submit" class="btn">Применить 10%</button>
        <p id="couponMsg" class="msg" role="status"></p>
    </form>
</x-zoo.exhibit>
