import React, { useCallback, useEffect, useState } from "react";

import {
  StyleSheet,
  View,
  SafeAreaView,
  StatusBar,
  Text,
  TextInput,
  TouchableOpacity,
  Alert,
  ActivityIndicator,
  Image,
  ScrollView,
} from "react-native";

import { Entypo, AntDesign, FontAwesome5, Feather } from "@expo/vector-icons";
import * as SplashScreen from "expo-splash-screen";
import * as Font from "expo-font";

SplashScreen.preventAutoHideAsync();

import {
  useFonts,
  Outfit_100Thin,
  Outfit_200ExtraLight,
  Outfit_300Light,
  Outfit_400Regular,
  Outfit_500Medium,
  Outfit_600SemiBold,
  Outfit_700Bold,
  Outfit_800ExtraBold,
  Outfit_900Black,
} from "@expo-google-fonts/outfit";

export default function Login({ navigation, route }) {
  let [fontsLoaded] = useFonts({
    Outfit_100Thin,
    Outfit_200ExtraLight,
    Outfit_300Light,
    Outfit_400Regular,
    Outfit_500Medium,
    Outfit_600SemiBold,
    Outfit_700Bold,
    Outfit_800ExtraBold,
    Outfit_900Black,
  });

  const [appIsReady, setAppIsReady] = useState(false);
  const [loading, setLoading] = useState(false);

  const [users, setUsers] = useState([]);

  const [username, setUsername] = useState("");
  const [phone, setPhone] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const [passwordVisible, setPasswordVisible] = useState(true);

  useEffect(() => {
    async function prepare() {
      try {
        await SplashScreen.preventAutoHideAsync();
        await Font.loadAsync(Entypo.font);
        await new Promise((resolve) => setTimeout(resolve, 200));
      } catch (e) {
        console.warn(e);
      } finally {
        setAppIsReady(true);
      }
    }

    prepare();
  }, []);

  const onLayoutRootView = useCallback(async () => {
    if (appIsReady) {
      await SplashScreen.hideAsync();
    }
  }, [appIsReady]);

  if (!appIsReady) {
    return null;
  }

  function etatPassowrd() {
    if (passwordVisible) {
      setPasswordVisible(false);
      setPasswordType("eye");
    } else {
      setPasswordVisible(true);
      setPasswordType("eye-slash");
    }
  }

  function SIGNUP() {
    if (email.length < 1) {
      Alert.alert("Echec", "L'adresse email est obligatoire");
      return;
    }

    if (username.length < 1) {
      Alert.alert("Echec", "Le username est obligatoire");
      return;
    }

    if (phone.length < 1) {
      Alert.alert("Echec", "Le numéro de telephone est obligatoire");
      return;
    }

    if (password.length < 1) {
      Alert.alert("Echec", "Le mot de passe est obligatoire");
      return;
    }

    var xml = new XMLHttpRequest();
    xml.open(
      "GET",
      "https://balezi-group.net/blive/models/m_signup.php?email=" +
        email +
        "&phone=" +
        phone +
        "&username=" +
        username +
        "&password=" +
        password,
      true
    );

    xml.onreadystatechange = function () {
      if (xml.readyState == 0) {
        setLoading(true);
      }

      if (xml.readyState == 1) {
        setLoading(true);
      }

      if (xml.readyState == 2) {
        setLoading(true);
      }

      if (xml.readyState == 3) {
        setLoading(true);
      }

      if (xml.readyState == 4 && (xml.status == 200 || xml.status == 0)) {
        switch (xml.responseText) {
          case "Votre compte a été créé avec succès":
            setLoading(false);
            setUsername("");
            setPhone("");
            setEmail("");
            setPassword("");
            navigation.navigate("login");
            break;

          default:
            setLoading(false);
            Alert.alert("Echec", xml.responseText);
            return;
            break;
        }
      }
    };

    xml.send(null);
  }

  return (
    <SafeAreaView style={styles.main_container} onLayout={onLayoutRootView}>
      <View style={styles.container} onLayout={onLayoutRootView}>
        <StatusBar
          backgroundColor={"#212429"}
          barStyle={"lihgt-content"}
        ></StatusBar>

        <View
          style={{
            fontFamily: "Outfit_400Regular",
            textAlign: "center",
            borderWidth: 1,
            borderColor: "transparent",
            marginTop: 20,
            justifyContent: "center",
            alignItems: "center",
            marginBottom: 30,
          }}
        >
          <Image
            style={{
              resizeMode: "contain",
              height: 100,
              width: 200,
              marginBottom: 20,
            }}
            source={require("../assets/public/logo-orange.png")}
          />
          <Text
            style={{
              fontFamily: "Outfit_400Regular",
              textAlign: "center",
              color: "gray",
            }}
          >
            Inscrivez-vous dès maintenant pour ne rien manquer de vos vidéos en
            direct préférées sur notre application mobile YouTube Live.
            Rejoignez notre communauté passionnée et restez connecté en tout
            temps.
          </Text>
        </View>

        <ScrollView
          style={{ width: "100%" }}
          showsVerticalScrollIndicator={false}
        >
          <View
            style={{
              width: "100%",
              height: 55,
              borderWidth: 1,
              borderColor: "gray",
              borderRadius: 10,
              marginBottom: 20,
              flexDirection: "row",
              alignItems: "center",
            }}
          >
            <AntDesign
              style={{ marginRight: 10, marginLeft: 10 }}
              name="user"
              size={20}
              color="gray"
            />
            <TextInput
              placeholder="Nom d'utilisateur"
              style={{
                flex: 2,
                height: 55,
                borderRadius: 10,
                fontFamily: "Outfit_400Regular",
              }}
              value={username}
              onChangeText={(text) => setUsername(text)}
            />
          </View>

          <View
            style={{
              width: "100%",
              height: 55,
              borderWidth: 1,
              borderColor: "gray",
              borderRadius: 10,
              marginBottom: 20,
              flexDirection: "row",
              alignItems: "center",
            }}
          >
            <Feather
              style={{ marginRight: 10, marginLeft: 10 }}
              name="phone"
              size={20}
              color="gray"
            />
            <TextInput
              placeholder="Numéro de telephone"
              style={{
                flex: 2,
                height: 55,
                borderRadius: 10,
                fontFamily: "Outfit_400Regular",
              }}
              value={phone}
              onChangeText={(text) => setPhone(text)}
            />
          </View>

          <View
            style={{
              width: "100%",
              height: 55,
              borderWidth: 1,
              borderColor: "gray",
              borderRadius: 10,
              marginBottom: 20,
              flexDirection: "row",
              alignItems: "center",
            }}
          >
            <Entypo
              style={{ marginRight: 10, marginLeft: 10 }}
              name="email"
              size={20}
              color="gray"
            />
            <TextInput
              placeholder="Votre adresse email"
              style={{
                flex: 2,
                height: 55,
                borderRadius: 10,
                fontFamily: "Outfit_400Regular",
              }}
              value={email}
              onChangeText={(text) => setEmail(text)}
            />
          </View>

          <View
            style={{
              width: "100%",
              height: 55,
              borderWidth: 1,
              borderColor: "gray",
              borderRadius: 10,
              marginBottom: 20,
              flexDirection: "row",
              alignItems: "center",
            }}
          >
            <AntDesign
              style={{ marginRight: 10, marginLeft: 10 }}
              name="lock"
              size={20}
              color="gray"
            />
            <TextInput
              placeholder="Votre mot de passe"
              secureTextEntry={true}
              style={{
                flex: 2,
                height: 55,
                borderRadius: 10,
                fontFamily: "Outfit_400Regular",
              }}
              value={password}
              onChangeText={(text) => setPassword(text)}
            />
          </View>

          <TouchableOpacity
            style={{
              width: "100%",
              height: 55,
              backgroundColor: "#212429",
              borderRadius: 10,
              flexDirection: "row",
              justifyContent: "center",
              alignItems: "center",
            }}
            onPress={() => {
              SIGNUP();
            }}
          >
            <AntDesign name="login" size={24} color="white" />
            <Text
              style={{
                color: "white",
                fontSize: 15,
                fontFamily: "Outfit_400Regular",
                marginLeft: 10,
              }}
            >
              Je m'inscris
            </Text>
          </TouchableOpacity>

          <TouchableOpacity
            style={{
              width: "100%",
              height: 55,
              flexDirection: "row",
              justifyContent: "center",
              alignItems: "center",
            }}
            onPress={() => navigation.navigate("login")}
          >
            <AntDesign name="login" size={24} color="white" />
            <Text
              style={{
                color: "blue",
                textDecorationLine: "underline",
                fontSize: 15,
                fontFamily: "Outfit_400Regular",
              }}
            >
              J'ai déjà un compte
            </Text>
          </TouchableOpacity>
        </ScrollView>
      </View>
      {loading ? (
        <View
          style={{
            position: "absolute",
            top: 0,
            left: 0,
            right: 0,
            bottom: 0,
            backgroundColor: "rgba(255,255,255,0.4)",
            paddingHorizontal: 10,
            justifyContent: "center",
            alignItems: "center",
          }}
        >
          <ActivityIndicator size="large" color="#d12617" />
        </View>
      ) : null}
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  main_container: {
    flex: 1,
    backgroundColor: "#fff",
  },
  container: {
    flex: 1,
    backgroundColor: "#fff",
    paddingHorizontal: 15,
  },
});
