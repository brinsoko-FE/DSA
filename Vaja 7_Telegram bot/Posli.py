import requests
ACCESS_TOKEN = '6834128868:AAGg2avBhUh_TSk7ZYjMmqN3s67-9AOFPcY'
CHANNEL_ID = '-100-4062557720' #Za pošiljanje na osebni ID oznake -100 ne vpisujte
api_url = 'https://api.telegram.org/bot{token}/{method}'.format
def telegram_command(name, data):
 url = api_url(token=ACCESS_TOKEN, method=name)
 return requests.post(url=url, json=data)
def telegram_sendMessage(text: str, chat_id: str, notify=True):
 return telegram_command('sendMessage', {
 'text': text,
 'chat_id': chat_id,
 'parse_mode': 'markdown',
 'disable_notification': not notify})

telegram_sendMessage('Testiranje', CHANNEL_ID)