<?php

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Request;

new class extends Component {
    #[On('openSession')]
    public function handleEvent($id = null, $domain = null)
    {
        if ($domain == Request::getHost()) {
            $User = User::find($id);
            Auth::login($User);
            return $this->redirect('/dashboard', navigate: true);
        }
        abort(500, 'غير مسجل');
    }
};
?>

<div>
    <div x-data="realtime()" x-init="init()"></div>
    <div>
        <script>
            window.appId = "{{ app('channel_id') }}";
            Alpine.data('realtime', () => ({
                init() {
                    window.Echo.channel('channel.' + window.appId)
                        .listen('.test.message', (e) => {
                            Livewire.dispatch('openSession', {
                                id: e.data.id,
                                domain: e.data.domain
                            });
                        });
                }
            }));
        </script>
    </div>

</div>
