<div class="form signup">
                <span class="title">تۆمارکردن</span>

                <form action="{{ route('register.post') }}" method="POST">
                @csrf
                    <div class="input-field">
                        <input type="text" id="name" placeholder="ناوت بنووسە" name="name" required autofocus>
                        <i class="uil uil-user"></i>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="text" id="email_address" placeholder="ئیمێڵت بنووسە" name="email" required autofocus>
                        <i class="uil uil-envelope icon"></i>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    
                    <div class="input-field">
                        <input id="password" class="password" placeholder="وشەی نهێنی بنووسە" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                        @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">هەموو مەرجەکانم قبووڵە</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="تۆمارکردن">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">پێشتر خۆت تۆمارکردییە؟
                        <a href="#" class="text login-link">چوونەژوورەوە</a>
                    </span>
                </div>
            </div>