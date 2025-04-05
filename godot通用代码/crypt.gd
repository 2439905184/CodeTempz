extends Node

static func pad(a_in:PackedByteArray, a_bytes:int) -> PackedByteArray:
	assert(a_bytes >- 0x04)
	assert(a_bytes <= 0x7f)
	a_bytes = a_bytes & 0x7c
	var ilen:int = a_in.size()
	var blen:int = ilen + (a_bytes - (ilen % a_bytes))
	var n:int = blen - ilen
	if (n == 0): n = a_bytes
	for i in range(n):
		a_in.append(n)
	return a_in

# 密钥32位 AES-256-ECB
static func encode(data, key):
	if !data: return
	data = JSON.stringify(data, "", false)
	var aes = AESContext.new()
	aes.start(AESContext.MODE_ECB_ENCRYPT, key.to_utf8_buffer())
	var encrypted = aes.update(pad(data.to_utf8_buffer(), 16))
	aes.finish()
	return Marshalls.raw_to_base64(encrypted).uri_encode()

static func decode(encode, key):
	if !encode: return
	encode = Marshalls.base64_to_raw(encode.uri_decode())
	var aes = AESContext.new()
	aes.start(AESContext.MODE_ECB_DECRYPT, key.to_utf8_buffer())
	var decrypted = aes.update(encode)
	aes.finish()
	decrypted = JSON.parse_string(decrypted.get_string_from_utf8())
	return decrypted

static func md5(str):
	return str.md5_text()
